@extends('layouts.master')
@section('main-content')
<div class="breadcrumb">
                <h1>Network Status (Work in progress)</h1>
</div>
<div class="separator-breadcrumb border-top"></div>
            {{-- end of breadcrumb --}}
            <div class="card o-hidden mb-4">
                                <div class="card-header d-flex align-items-center border-0">
                                    <h3 class="w-50 float-left card-title m-0">Pools Status</h3>

                                </div>

                                <div class="">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Pool</th>
                                            <th scope="col">URL</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Pool Hashrate</th>
                                            <th scope="col">Network Hashrate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">0xBitcoin</th>
                                            <td>x.hodler.energy:9100</td>
                                            <td><span class="badge badge-danger">Down</span></td>
                                            <td>0 GH/s</td>
                                            <td>0 GH/s</td>

                                        </tr>
                                        <tr>
                                        <tr>
                                            <th scope="row">Amoveo</th>
                                            <td>x.hodler.energy:9200</td>
                                            <td><span class="badge badge-danger">Down</span></td>
                                            <td>0 GH/s</td>
                                            <td>0 GH/s</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Denarius</th>
                                            <td>x.hodler.energy:9300</td>
                                            <td><span class="badge badge-danger">Down</span></td>
                                            <td>0 GH/s</td>
                                            <td>0 GH/s</td>
                                        </tr>
                                    </tbody>
                                    
                                    
                                </table>
                                
                                
                            </div> </div>
                            
                            


                        </div>

                        <div class="card o-hidden mb-4">
                                <div class="card-header d-flex align-items-center border-0">
                                    <h3 class="w-50 float-left card-title m-0">Website Status</h3>

                                </div>

                                <div class="">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Website</th>
                                            <th scope="col">URL</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Hodler Energy Website</th>
                                            <td>https://hodler.energy</td>
                                            <td><span class="badge badge-success">Active</span></td>

                                        </tr>
                                        <tr>
                                        <tr>
                                            <th scope="row">Hodler Energy Pool</th>
                                            <td>https://pool.hodler.energy</td>
                                            <td><span class="badge badge-success">Active</span></td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Altilly API</th>
                                            <td>api.altilly.com</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                    </tbody>
                                    
                                    
                                </table>
                                
                                
                            </div></div>
@endsection
