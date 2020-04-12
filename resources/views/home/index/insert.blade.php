@extends('home.public.base')
@section('body')
<!-- 复制登录表单 -->
<div class="row">
		<!-- 左侧8列 -->
		<div class="col-md-8">
		<!-- 页头 -->
		<div class="page-header">
  			<h2>发布文章</h2>
		</div>
		<!-- 注册表单:采用水平表单 -->
		<form action="{{url('home/store')}}" enctype="multipart/form-data" method="post">
			<!-- 用隐藏域向服务器传送作者:当用发布文章的用户id -->
            @csrf


                <div class="form-group">
                    <label for="title">标题</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="文章标题">
                </div>
                <div class="form-group">
                    <label>分类</label>
                    <select class="form-control" name="cate_id"> <!--name与字段名对应-->
                        @foreach($cate as $v)
                            <option value="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group" >
                <label>内容</label>

                <textarea id="editor"  class="form-control" placeholder="文章内容" id="content" name="content" style="min-height: 250px;">

                </textarea>
                </div>

                <div class="form-group">
                    <label for="title_img">标题图片</label>
                    <input type="file" name="title_img" id="title_img">
                    <p class="help-block"></p>
                </div>
                <!-- 这里使用原生的post提交 -->
                <button type="submit" class="btn btn-primary">保存</button>
            </form>
@endsection
