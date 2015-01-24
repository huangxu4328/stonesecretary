@extends('admin._layouts.default')

@section('main');

<div>
    <table>
        <thead>
            <tr>
                <th>编号</th>
                <th>分类名</th>
                <th>分类创建时间</th>
                <th>上级分类编号</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->created_at}}</td>
                <td>{{$value->parent}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
