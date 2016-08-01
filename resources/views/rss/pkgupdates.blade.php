@extends('rss')

@section('items')
    @foreach($pkgupdates as $update)
        @set('new', $update['new'] == 1 ? ' (new)' : '')

        @include('rss.item', [
            'title' => $update['pkgname'] . ' ' . $update['pkgver'] . '-' . $update['pkgrel'] . $new,
            'link' => URL::to('/') . '/packages/' . $update['pkgname'],
            'date' => $update['date'],
            'body' => '',
            'body_markdown' => false
        ])
    @endforeach
@endsection