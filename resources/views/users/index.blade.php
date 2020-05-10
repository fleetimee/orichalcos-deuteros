@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">Users</div>
        <div class="card-body">
            @if ($users->count() > 0)
            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>

                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td class="ml-5">
                            @if (!$user->isAdmin())
                                <button class="btn btn-success btn-sm">Make Admin</button>
                            @endif
                        </td>
                    </tr>
                </tbody> 
                @endforeach
            </table>

            @else 
                <h3 class="text-center">No users yet</h3>
            @endif
            
        </div>
    </div>
@endsection