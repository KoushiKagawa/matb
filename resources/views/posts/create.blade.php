@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('投稿') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}" accept-charset="UTF-8" class="p-t45" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">                          
                            <label for="title" class="col-md-4 col-form-label text-md-right">タイトル</label> 
                            <div class="col-md-6">
                                <input class="form-control" name="title" maxlength="255" value="{{ old('title') }}" placeholder="タイトルを入力してください。" autofocus>
                            </div>                           
                        </div>

                        <div class="form-group row">                          
                            <label for="content" class="col-md-4 col-form-label text-md-right">詳細内容</label> 
                            <div class="col-md-6">
                                <textarea class="form-control" placeholder="例：Laravelのログイン機能実装をお願いします。" name="content" cols="50" rows="10">{{ old('content') }}</textarea>        
                            </div>                           
                        </div>

                        <div class="form-group row">                          
                            <label for="price" class="col-md-4 col-form-label text-md-right">報酬</label> 
                            <div class="col-md-6">
                                <input class="form-control" name="price" maxlength="255" value="{{ old('price') }}" placeholder="10000" autofocus>
                            </div>                           
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('募集を作成') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection