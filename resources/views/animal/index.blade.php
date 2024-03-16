@extends('layouts.app')

@section('template_title')
    Animal
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Animal') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('animals.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Species</th>
										<th>Birth Date</th>
										<th>Habitat Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($animals as $animal)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $animal->name }}</td>
											<td>{{ $animal->species }}</td>
											<td>{{ $animal->birth_date }}</td>
											<td>{{ $animal->habitat_id }}</td>

                                            <td>
                                                <form action="{{ route('animals.destroy',$animal->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('animals.show',$animal->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('animals.edit',$animal->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $animals->links() !!}
            </div>
        </div>
    </div>
@endsection
