@can('user.index')
  <h1>Bienvenido</h1>
  <p>Puede <b><a href="{{route('users.index')}}">ir index</a></b></p>
@endcan
@can('user.create')
<p>Puede <b><a href="{{route('users.create')}}">Create</a></b></p>
@endcan
@can('user.store')
  <p>Puede <b>Store</b></p>
@endcan
@can('user.show')
  <p>Puede <b>Show</b></p>
@endcan
@can('user.edit')
  <p>Puede <b>Edit</b></p>
@endcan
@can('user.update')
  <p>Puede <b>Update</b></p>
@endcan
@can('user.destroy')
  <p>Puede <b>Destroy</b></p>
@endcan