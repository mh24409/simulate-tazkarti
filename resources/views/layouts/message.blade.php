<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors -> all() as $error)
        <li> 
            {{$error}}
           
        </li>
        @endforeach
    </ul>
</div>
@endif

@if(session('status'))
<?php $m = session('status') ; ?>
<script>
    Swal.fire({
        icon: 'success',
        text: '<?= $m ?>' ,
    })
</script>
@endif

@if(session('wrong'))
<?php $m = session('wrong') ; ?>
<script>
    Swal.fire({
        icon: 'error',
        text: '<?= $m ?>' ,
    })
</script>
@endif