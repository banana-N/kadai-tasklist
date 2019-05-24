@extends('layouts.app')

@section('content')

 <h1>タスク新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
           <div class="form-group">
                {{ Form::label('status', 'ステータス:') }}
                <!--{!! Form::text('status', 'この引数はvalue', ['class' => 'form-control']) !!}-->
                {{ Form::select('status',[
                    '未着手' => '未着手',
                    '作業中' => '作業中',
                    '提出済み' => '提出済み',
                    '完了' => '完了'
                    ],'ここはデフォルトにしたいvalueを指定', ['class' => 'form-control','placeholder' => '選択してください']) }}
            </div>
        
            <div class="form-group">
                {!! Form::label('content', 'タスク:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            
            {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>

@endsection