@extends('layouts.usermain')

@section('content')

                <main id="content" class="bg-gray-01">
                    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
                        <div class="d-flex flex-wrap flex-md-nowrap mb-6">
                            <div class="mr-0 mr-md-auto">
                                <h2 class="mb-0 text-heading fs-22 lh-15">My Orders
                                    <span class="badge badge-white badge-pill text-primary fs-18 font-weight-bold ml-2"> {{ $orders->count() }} </span>
                                </h2>
                             </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover bg-white border rounded-lg">
                                <thead class="thead-sm thead-black">
                                    <tr>
                                        <th scope="col" class="border-top-0 px-6 pt-5 pb-4">#</th>
                                        <th scope="col" class="border-top-0 px-6 pt-5 pb-4">Order Number</th>
                                        <th scope="col" class="border-top-0 px-6 pt-5 pb-4">Order Total</th>
                                        <th scope="col" class="border-top-0 px-6 pt-5 pb-4">Item Count</th>
                                        <th scope="col" class="border-top-0 pt-5 pb-4">Date Createdt</th>
                                        <th scope="col" class="border-top-0 pt-5 pb-4">Status</th>
                                     </tr>
                                </thead>
                                <tbody>
                                    @if($orders->count() > 0)
                                    @foreach($orders as $index=> $row)

                                    <tr class="shadow-hover-xs-2 bg-hover-white">
                                        <td class="align-middle pt-6 pb-4 px-6">   {{ $index + 1}} </td>
                                        <td class="align-middle">{{ $row->order_number }}</td>
                                        <td class="align-middle">{{ $row->grand_total }}</td>
                                        <td class="align-middle">{{ $row->item_count }}</td>
                                        <td class="align-middle">{{ display_datetime($row->updated_at ?? $row->created_at) }}</td>
                                        <td class="align-middle">  {{ ($row->is_paid) ? 'Paid' : 'Not Paid' }}  </td>

                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </main>
            </div>
        </div>
    </div>

@endsection
