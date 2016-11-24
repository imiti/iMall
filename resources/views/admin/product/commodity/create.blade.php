@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">商品新增</div>
        <div class="panel-body">
            <form class="form-small-text" action="{{url('admin/product/commodity')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label>排序：</label>
                    <input name="commodity_sort" type="number" class="form-control" placeholder="值越小越靠前显示,默认为0">
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <input name="commodity_name" type="text" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>图片：</label>
                    <input name="file" type="file" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>编号：</label>
                    <input name="commodity_number" type="text" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>所属专题：</label>
                    <select class="form-control" name="topic_id">
                        <option value="0" selected>无</option>
                        @foreach($topics as $topic)
                            <option value="{{$topic->id}}}">{{$topic->topic_title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>所属板块：</label>
                    <select class="form-control" name="plate_id">
                        <option value="0" selected>无</option>
                        @foreach($plates as $plate)
                            <option value="{{$plate->id}}}">{{$plate->plate_title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>所属分类：</label>
                    <select class="form-control" name="category_id">
                        <option value="0" selected>无</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>商品简介：</label>
                    <textarea  rows="4" cols="80" name="commodity_base_info" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>商品详情：</label>
                    <textarea name="commodity_detail_info" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>原价：</label>
                    <input name="commodity_original_price" type="text" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>现价：</label>
                    <input name="commodity_current_price" type="text" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>库存：</label>
                    <input name="commodity_stock_number" type="text" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>销量：</label>
                    <input name="commodity_sold_number" type="text" class="form-control" placeholder="可选，默认为0">
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <label class="radio-inline">
                        <input type="radio" name="commodity_disabled" value="1" checked> 上架
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="commodity_disabled" value="2"> 下架
                    </label>
                </div>
                <button type="submit" class="btn btn-default">保存</button>
            </form>
        </div>
    </div>
@endsection

@section('scriptTag')
    <script src="{{asset('js/admin/product/commodityCreate.js')}}"></script>
@endsection