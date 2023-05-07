<?php

namespace App\Admin\Controllers;

use App\Models\ReservationSlot;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Carbon\Carbon;

class ReservationSlotController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ReservationSlot';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ReservationSlot());

        $grid->column('id', __('Id'));
        $grid->column('thedate', __('Thedate'));
        $grid->column('reservation_room_id', __('Reservation room id'));
        $grid->column('reserve_flg', __('Reserve flg'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        // 本日以降のデータを取得する
        $today = Carbon::now();
        $grid->model()->where('thedate', '>', $today);

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ReservationSlot::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('thedate', __('Thedate'));
        $show->field('reservation_room_id', __('Reservation room id'));
        $show->field('reserve_flg', __('Reserve flg'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ReservationSlot());

        $form->date('thedate', __('Thedate'))->default(date('Y-m-d'));
        $form->number('reservation_room_id', __('Reservation room id'));
        $form->number('reserve_flg', __('Reserve flg'));

        return $form;
    }
}
