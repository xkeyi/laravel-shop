<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\CrowdfundingProduct;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;

class CrowdfundingProductsController extends CommonProductsController
{
    public function getProductType()
    {
        return Product::TYPE_CROWDFUNDING;
    }

    protected function customGrid(Grid $grid)
    {
        $grid->id('ID')->sortable();
        $grid->title('商品名称');
        $grid->on_sale('已上架')->display(function ($value) {
            return $value ? '是' : '否';
        });
        $grid->price('价格');

        // 展示众筹相关字段
        $grid->column('crowdfunding.target_amount', '目标金额');
        $grid->column('crowdfunding.end_at', '结束时间');
        $grid->column('crowdfunding.total_amount', '目前金额');
        $grid->column('crowdfunding.status', ' 状态')->display(function ($value) {
            return CrowdfundingProduct::$statusMap[$value];
        });
    }

    protected function customForm(Form $form)
    {
        // 添加众筹相关字段
        $form->text('crowdfunding.target_amount', '众筹目标金额')->rules('required|numeric|min:0.01');
        $form->datetime('crowdfunding.end_at', '众筹结束时间')->rules('required|date');
    }
}
