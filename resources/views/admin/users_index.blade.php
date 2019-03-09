  @extends('layouts.admin')
  @section('content')
  <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> Combined All Table</div>
                    <div class="card-body">
                      <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>用户名</th>
                            <th>Email</th>
                            <th>注册日期</th>
                            <th>角色</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        	@foreach ($users as $user)
	                          <tr data-id='{{ $user->id }}'>
	                            <td>{{ $user->id }}</td>
	                            <td>{{ $user->name }}</td>
	                            <td>{{ $user->email }}</td>
	                            <td>{{ $user->created_at->format('Y/m/d') }}</td>
	                            <td>
	                            	<div class="btn-group">
        	                          <div class="dropdown">
        	                            <button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $user->role == 'admin' ? '管理员' : '用户' }}</button>
        	                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
        	                            	<button class="dropdown-item" type="button" onclick='changeRole("user", this)'>用户</button>
        	                            	<button class="dropdown-item" type="button" onclick='changeRole("admin", this)'>管理员</button>
        	                            </div>
        	                          </div>
        	                        </div>
	                            </td>
	                            <td>
	                              <span class="badge badge-success">Active</span>
	                            </td>
	                          </tr>

                        	@endforeach
                        </tbody>
                      </table>
                      <nav>
                      {{ $users->links() }}

                      </nav>

                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>

@endsection

@push('js')
<script>
function changeRole(role, obj) {
	let id = $(obj).parents('tr').data('id')
	const changed = (role == 'user') ? '用户' : '管理员'
	axios.put('/admin/users', {"id": id, "role": role})
		.then((res) => {
			if (0 !== res.data) {
				console.log($(obj).parents('tr').find('#dropdownMenuButton').html(changed))
			}
		})
}
</script>
@endpush