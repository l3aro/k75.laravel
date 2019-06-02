file articles
@php
    print_r($articles);
@endphp


@foreach ($articles as $article)
<h1>{{ $article->title }}</h1>
@endforeach


{{-- <h1>Món ngon</h1>
<h1>Món ngon</h1> --}}
<br>
Tổng giá trị id: {{ $articles->sum('id') }}
<br>
Số lượng bản ghi: {{ $articles->count() }}
<br>
Tính trung bình cộng: Số lượng bản ghi: {{ $articles->avg('id') }}
<br>
Giá trị lớn nhất: {{ $articles->max('id') }}
<br>
Giá trị nhỏ nhất: {{ $articles->min('id') }}