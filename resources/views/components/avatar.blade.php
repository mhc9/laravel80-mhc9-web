<div class="structure-avatar border object-cover object-center" style="{{!empty($size) ? 'width:'.$size.'; height:' .$size : 'width: 60px; height: 60px;'}}">
    @if($imageUrl)
        <img src="{{$imageUrl}}" alt="employee-pic" style="{{!empty($size) ? 'width:'.$size : 'width: 60px;'}};" />
    @else
        <img src="./img/executive-01.png" alt="employee-pic" style="{{!empty($size) ? 'width:'.$size : 'width: 60px;'}};" />
    @endif
</div>