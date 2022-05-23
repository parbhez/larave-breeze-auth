<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Email Settings</h3>
                    </div>
                    <div class="card-body mt-3">
                      @php 
                            $row = DB::table('mail_settings')->latest()->first();
                      @endphp
                      <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Mail Transport</label>
                          <input type="text" class="form-control" name="mail_transport" value="{{$row->mail_transport}}" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mail Host</label>
                          <input type="text" class="form-control" name="mail_host" value="{{$row->mail_host}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mail Portport</label>
                          <input type="text" class="form-control" name="mail_port" value="{{$row->mail_port}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mail Username</label>
                          <input type="text" class="form-control" name="mail_username" value="{{$row->mail_username}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mail Password</label>
                          <input type="text" class="form-control" name="mail_password" value="{{$row->mail_password}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mail Encryption</label>
                          <input type="text" class="form-control" name="mail_encryption" value="{{$row->mail_encryption}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mail From</label>
                          <input type="text" class="form-control" name="mail_from" value="{{$row->mail_from}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>

