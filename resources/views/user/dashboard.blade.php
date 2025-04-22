@extends('user.base')
@section('content')
    @push('css')
        <style>

            .transaction-link {
                text-decoration: none;
            }

            .transaction-card {
                background-color: #122c3a;
                border-radius: 1rem;
                padding: 1rem;
                margin-bottom: 1rem;
                color: #d1d5db;
                box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
                transition: all 0.2s ease;
            }

            .transaction-card:hover {
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
                transform: scale(1.01);
            }

            .transaction-title {
                font-weight: 600;
                font-size: 0.95rem;
            }

            .transaction-id {
                color: #d9ff00;
                font-weight: bold;
                font-size: 0.85rem;
            }

            .transaction-date {
                font-size: 0.75rem;
                color: #9ca3af;
            }

            .transaction-amount {
                font-weight: bold;
                font-size: 1rem;
            }

            .amount-positive {
                color: #34d399;
            }

            .amount-negative {
                color: #f87171;
            }

            .transaction-status {
                font-size: 0.75rem;
                color: #10b981;
            }

            .fee {
                color: #ef4444;
                font-size: 0.8rem;
            }

            .label {
                font-size: 0.7rem;
                color: #9ca3af;
                text-transform: uppercase;
            }
        </style>
    @endpush
    @inject('injected','App\Defaults\Custom')

    @foreach($promos as $promo)
        <div class="ui-kit-card mb-24">
            <h3>{{$promo->title}}</h3>
            <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading">{{$promo->title}}</h4>
                {!! $promo->content !!}
                <div class="mt-3">
                    <a href="{{route('user.enrollPromo',['id'=>$promo->id])}}" class="btn btn-primary">Enroll</a>
                </div>
            </div>
        </div>
    @endforeach

    @foreach($notifications as $notification)
        <div class="ui-kit-card mb-24">
            <h3>{{$notification->title}}</h3>
            <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading">{{$notification->title}}</h4>
                {!! $notification->content !!}
            </div>
        </div>
    @endforeach

    <div class="row g-6 mt-6">
        <div class="card">
            <div class="row justify-content-between card-body">
                <div class="col-lg-3 col-sm-6 text-start col-6">
                    <div class="single-today-card d-flex align-items-center">
                        <a href="{{route('new_deposit')}}" class="btn btn-success rounded-pill">Deposit</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 text-start col-6">
                    <div class="single-today-card d-flex align-items-center">
                        <a href="{{route('new_investment')}}" class="btn btn-info rounded-pill">Invest</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 text-end col-6">
                    <div class="single-today-card d-flex align-items-center">
                        <a href="{{route('new_withdrawal')}}" class="btn btn-primary rounded-pill">Withdraw</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- Card Border Shadow -->

        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-warning h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-warning"
                          ><i class="ti ti-alert-triangle ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($user->balance,2)}}</h4>
                    </div>
                    <p class="mb-1">Account Balance</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($user->profit,2)}}</h4>
                    </div>
                    <p class="mb-1">Profit Balance</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
       <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-primary"
                          ><i class="ti ti-truck ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($injected->userDailyEarning($user->id),2)}}</h4>
                    </div>
                    <p class="mb-1">Today's Earning</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0"> ${{number_format($ongoingInvestments,2)}}</h4>
                    </div>
                    <p class="mb-1">Ongoing Investments</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($pendingDeposit,2)}}</h4>
                    </div>
                    <p class="mb-1">Pending  Deposits</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($user->withdrawals,2)}}</h4>
                    </div>
                    <p class="mb-1">Total Withdrawals</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($pendingWithdrawal,2)}}</h4>
                    </div>
                    <p class="mb-1">Pending Withdrawals</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($withdrawals,2)}}</h4>
                    </div>
                    <p class="mb-1">Completed Withdrawals</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($user->bonus,2)}}</h4>
                    </div>
                    <p class="mb-1">Bonus Balance</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($user->refBal,2)}}</h4>
                    </div>
                    <p class="mb-1">Referral Balance</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($totalDeposits,2)}}</h4>
                    </div>
                    <p class="mb-1">Total Deposit</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>


        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                        </div>
                        <h4 class="mb-0">${{number_format($completedInvestments,2)}}</h4>
                    </div>
                    <p class="mb-1">Completed Investments</p>
                    <p class="mb-0">

                    </p>
                </div>
            </div>
        </div>



    </div>

    <div class="container py-4">
        <h5 class="mb-3 text-dark fw-bold">Recent Transactions</h5>

        @if ($transactions->isEmpty())
            <div class="text-center p-5 bg-white border rounded-3 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="mb-3" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2m0 0c1.1 0 2-.9 2-2s-.9-2-2-2m0 6v.01M21 12c0 4.97-4.03 9-9 9S3 16.97 3 12 7.03 3 12 3s9 4.03 9 9z"/>
                </svg>
                <h6 class="fw-bold text-secondary mb-1">No Transactions Found</h6>
                <p class="text-muted mb-0" style="font-size: 0.9rem;">You haven’t made any deposits, withdrawals or investments yet.</p>
            </div>
        @else
            @foreach ($transactions as $tx)
                <div class="transaction-card">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="transaction-title">{{ $tx['label'] }}</div>
                            <div class="transaction-id">{{ $tx['reference'] }}</div>
                            <div class="transaction-date">{{ \Carbon\Carbon::parse($tx['created_at'])->format('M d, Y H:i') }}</div>
                        </div>
                        <div class="text-end">
                            <div class="transaction-amount {{ $tx['symbol'] === '+' ? 'amount-positive' : 'amount-negative' }}">
                                {{ $tx['symbol'] }}{{ number_format($tx['amount'], 2) }} USD
                            </div>
                            <div class="fee">−0 USD Fee</div>
                            <div class="label">{{ ucfirst($tx['type']) }}</div>
                            <div class="transaction-status">Success</div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>



@endsection
