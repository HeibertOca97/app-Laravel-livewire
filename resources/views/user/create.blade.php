@can('user.index')
  <h1>Bienvenido create</h1>
  <p>Puede <b><a href="{{route('users.index')}}">ir index</a></b></p>
@endcan
@can('user.create')
  <p>Puede <b>Create</b></p>
@endcan
@can('user.store')
  <p>Puede <b><a href="{{route('users.store')}}">Store</a></b></p>
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