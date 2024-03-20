@extends('layouts.admin')


@section('template_title')
    Visitor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Visitor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('visitors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Surname</th>
										<th>Visit Date</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($visitors as $visitor)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $visitor->name }}</td>
											<td>{{ $visitor->surname }}</td>
											<td>{{ $visitor->visit_date }}</td>

                                            <td>
                                                <form action="{{ route('visitors.destroy',$visitor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('visitors.show',$visitor->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('visitors.edit',$visitor->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $visitors->links() !!}
            </div>
        </div>
    </div>
@endsection
