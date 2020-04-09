@if($posts->isNotEmpty())
   {{$slot}}
    @include('client.components.paginate.base')
@else
    @lang('post.not-found')
@endif


