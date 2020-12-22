<?php

class shopSeoredirectUrlArchivator
{
	protected $data = array();

	public function __construct()
	{
	}

	public function run()
	{
		try
		{
			$shop_urls_model = new shopSeoredirectShopUrlsModel();
			$shop_urls_model->query('TRUNCATE TABLE ' . $shop_urls_model->getTableName());
		}
		catch (Exception $e)
		{}

		$category_model = new shopCategoryModel();
		$this->archiveData($category_model, shopSeoredirectType::CATEGORY, '`id`, `url`, `full_url`, `parent_id`');

		$product_model = new shopProductModel();
		$this->archiveData($product_model, shopSeoredirectType::PRODUCT, '`id`, `url`, \'\' as `full_url`, `category_id` as `parent_id`');

		$product_pages_model = new shopProductPagesModel();
		$this->archiveData($product_pages_model, shopSeoredirectType::PRODUCT_PAGE, '`id`, `url`, \'\' as `full_url`, `product_id` as `parent_id`');

		$page_model = new shopPageModel();
		$this->archiveData($page_model, shopSeoredirectType::PAGE, '`id`, `url`, `full_url`, `parent_id`');

		$this->archiveSeofilterData();

		$this->archiveProductBrandsData();

		return $this;
	}

	private function archiveData(waModel $model, $type, $select)
	{
		$shop_urls_model = new shopSeoredirectShopUrlsModel();
		$limit = 500;
		$i = 0;
		$items_data = array();

		foreach ($model->select($select)->query() as $item)
		{
			if ($type == shopSeoredirectType::PAGE)
			{
				$item['url'] = preg_replace('/\/$/', '', $item['url']);
				$item['full_url'] = preg_replace('/\/$/', '', $item['full_url']);
			}
			$data = array(
				'id' => $item['id'],
				'type' => $type,
				'url' => $item['url'],
				'full_url' => ifset($item['full_url'], ''),
				'parent_id' => intval($item['parent_id']),
				'create_datetime' => date('Y-m-d H:i:s'),
			);
			$data['hash'] = $this->getHash($data);
			$items_data[] = $data;
			$i++;
			if ($i == $limit)
			{
				$shop_urls_model->multipleInsert($items_data);
				$i = 0;
				$items_data = array();
			}
		}

		if (count($items_data))
		{
			$shop_urls_model->multipleInsert($items_data);
		}
	}

	private function archiveSeofilterData()
	{
		if (!shopSeoredirectHelper::seofilterExists())
		{
			return;
		}
		if (shopSeoredirectHelper::seofilterOver2())
		{
			if (class_exists('shopSeofilterFilterModel'))
			{
				$shop_urls_model = new shopSeoredirectShopUrlsModel();
				$seofilter_filter_model = new shopSeofilterFilterModel();
				$limit = 500;
				$i = 0;
				$seofilters = array();
				foreach ($seofilter_filter_model->select('`id`, `url`')->query() as $item)
				{
					$data = array(
						'id' => $item['id'],
						'type' => shopSeoredirectType::SEOFILTER,
						'url' => $item['url'],
						'full_url' => '',
						'parent_id' => 0,
						'create_datetime' => date('Y-m-d H:i:s'),
					);
					$data['hash'] = $this->getHash($data);
					$seofilters[] = $data;
					$i++;
					if ($i == $limit)
					{
						$shop_urls_model->multipleInsert($seofilters);
						$i = 0;
						$seofilters = array();
					}
				}
				if (count($seofilters))
				{
					$shop_urls_model->multipleInsert($seofilters);
				}
			}
		}
	}

	private function archiveProductBrandsData()
	{
		if (!shopSeoredirectBrands::existsBrands())
		{
			return;
		}
		$model = new shopSeoredirectShopUrlsModel();
		$brands = shopSeoredirectBrands::getBrands();
		foreach ($brands as $brand)
		{
			if ($brand['url'] && (int)$brand['count'])
			{
				$model->addBrandData($brand);
			}
		}
	}

	private function getHash($node)
	{
		$hash_array = array(
			'id' => $node['id'],
			'type' => $node['type'],
			'url' => $node['url'],
			'full_url' => $node['full_url'],
			'parent_id' => $node['parent_id'],
		);
		
		return md5(json_encode($hash_array));
	}

	/**
	 * @return array
	 */
	public function getData()
	{
		return $this->data;
	}
}