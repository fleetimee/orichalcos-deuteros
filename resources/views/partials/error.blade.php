@if ($errors->any())
<div class="alert alert-danger">
    <ul class="list-group">
        @foreach ($errors->all() as $error)
             <li class="list-group-item text-danger"><i class="las la-times"></i>
                 {{ $error }}
             </li>
        @endforeach
    </ul>
</div>
@endif