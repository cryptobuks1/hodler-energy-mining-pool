@extends('layouts.master')
@section('main-content')
<div class="breadcrumb">
                <h1>Hodler Energy Dashboard</h1>
</div>
<div class="separator-breadcrumb border-top"></div>
            {{-- end of breadcrumb --}}


            <!-- -->
            <div class="card mt-2 mb-4">
                                <div class="card-header card-title mb-3">What is Hodler Energy?</div>
                                <div class="card-body">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="true">About Hodler Energy</a>
                                            <a class="nav-item nav-link" id="nav-buy-tab" data-toggle="tab" href="#nav-buy" role="tab" aria-controls="nav-buy" aria-selected="false">Buy Tokens</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content ul-tab__content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab"><br>
                                        Hodler Energy is a crowdfunded FPGA mining operation, established by Hodler Enterprises in mid-2018 and located in Sweden.<br>
                                        The key is to offer tokens that share the profit that is being made with Hodler Energy.<br>
                                        The funds raised by offering tokens will be used to purchase mining hardware.<br>
                                        We will focus on mining a range of profitable coins, 90% of the general profit will be shared with all tokens holders.<br>
                                        Wallets with unsold tokens are not included in the shared profit. Which means that only people who have tokens will be rewarded.<br>
                                        Hodler Enterprises will be retaining 10% of profit for future developments and producing additional profit by selling similar hardware with immersion cooling technology through Hodler Energy.<br>
                                        Hodler Energy tokens are valued at $150 per token.<br>
                                        Unlike traditional mining ICO’s, the reason for increasing the price per token is to cover the costs of mining-related fees.<br>
                                        With lower-priced tokens, it is not profitable for any party to reward investors with tokens that have a lower value than the actual transaction fee.<br>
                                        Token-holders are allowed to join our private telegram group, where you can discuss and provide input into future companies decisions, providing you with a voice on our future developments and business direction.
                                        </div>
                                        <div class="tab-pane fade" id="nav-buy" role="tabpanel" aria-labelledby="nav-buy-tab"><br>
                                        Hodler Energy tokens can be purchased at https://altilly.com.<br>
                                        Hodler Energy offers tokens on the Ethereum (ERC20) and Qredit (QAE-1)platform.<br>
                                        Token holders are able to receive their payouts in Ethereum or Qredit. We advise holders to keep their tokens in their own wallets to guarantee payouts.<br>
                                        It is possible that you will not receive monthly payouts if tokens are held on the exchange.<br>
                                        Please contact us or join us in the telegram channel for more information. (telegram: https://t.me/hodlerenergy)
                                        </div>
                                    </div>
                                </div>
                            </div>
            <!-- -->
            <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Data-Upload"></i>
                                    <p class="text-muted mt-2 mb-2">Currently Mining</p>
                                    <p class="text-primary text-24 line-height-1 m-0">0xBTC | BCH</p>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Add-User"></i>
                                    <p class="text-muted mt-2 mb-2">Daily Income per Token</p>
                                    <p class="text-primary text-24 line-height-1 m-0">$ 0.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Money-2"></i>
                                    <p class="text-muted mt-2 mb-2">Tokens in Circulation</p>
                                    <p class="text-primary text-24 line-height-1 m-0">2250</p>
                                </div>
                            </div>
                        </div>
                        </div>


<!-- new line -->

            <div class="card mt-2 mb-4">
                                <div class="card-header card-title mb-3">ROI Calculator</div>
                                <div class="card-body">
                            <div class="noUi text-center">
<div style="color: #393a9c; "><span>Investment: </span>
€ <b id="investment"></b></div>
&nbsp;

</div>
<div class="slider align-center"><input type="range" min="100" max="100000" value="100" step="100" class="slider" id="myRange" /></div>
&nbsp;

&nbsp;

&nbsp;

&nbsp;
                            <div class="table-responsive">
                                <table class="table">
                                <tbody>
<tr>
<td>BTC Value</td>
<td>1 Month</td>
<td>3 Months</td>
<td>6 Months</td>
<td>1 Year</td>
<td>2 Years</td>
<td>3 Years</td>
</tr>
<tr>
<td>€ 3000</td>
<td>€ <b name="monthly1return"></b></td>
<td>€ <b name="monthly3return"></b></td>
<td>€ <b name="monthly6return"></b></td>
<td>€ <b name="yearlyreturn"></b></td>
<td>€ <b name="yearly2return"></b></td>
<td>€ <b name="yearly3return"></b></td>
</tr>
<tr>
<td>€ 6000</td>
<td>€ <b name="monthly1return"></b></td>
<td>€ <b name="monthly3return"></b></td>
<td>€ <b name="monthly6return"></b></td>
<td>€ <b name="yearlyreturn"></b></td>
<td>€ <b name="yearly2return"></b></td>
<td>€ <b name="yearly3return"></b></td>
</tr>
<tr>
<td>€ 9000</td>
<td>€ <b name="monthly1return"></b></td>
<td>€ <b name="monthly3return"></b></td>
<td>€ <b name="monthly6return"></b></td>
<td>€ <b name="yearlyreturn"></b></td>
<td>€ <b name="yearly2return"></b></td>
<td>€ <b name="yearly3return"></b></td>
</tr>
<tr>
<td>€ 12000</td>
<td>€ <b name="monthly1return"></b></td>
<td>€ <b name="monthly3return"></b></td>
<td>€ <b name="monthly6return"></b></td>
<td>€ <b name="yearlyreturn"></b></td>
<td>€ <b name="yearly2return"></b></td>
<td>€ <b name="yearly3return"></b></td>
</tr>
</tbody>
</table>
<script>// <![CDATA[
var slider = document.getElementById("myRange");
var investment = document.getElementById("investment");
var monthly1return = document.getElementsByName("monthly1return");
var monthly3return = document.getElementsByName("monthly3return");
var monthly6return = document.getElementsByName("monthly6return");
var yearly1return = document.getElementsByName("yearlyreturn");
var yearly2return = document.getElementsByName("yearly2return");
var yearly3return = document.getElementsByName("yearly3return");

investment.innerHTML = slider.value; // Display the default slider value

var monthlyrate = 0.040062;
var rates = [];
rates[0] = 0.040062;
rates[1] = 0.0520085;
rates[2] = 0.0708679;
rates[3] = 0.1180399;

var initialmonthly = monthlyrate*100;




for(i = 0; i < 4; i++){
var init1 =  (1 * rates[i])*100;
var init3 = (3 * rates[i])*100;
var init6 = (6 * rates[i])*100;
var init12 = (12 * rates[i])*100;
var init24 = (24 * rates[i])*100;
var init36 = (36 * rates[i])*100;

monthly1return[i].innerHTML = init1.toFixed(0);
monthly3return[i].innerHTML = init3.toFixed(0);
monthly6return[i].innerHTML = init6.toFixed(0);
yearly1return[i].innerHTML = init12.toFixed(0);
yearly2return[i].innerHTML = init24.toFixed(0);
yearly3return[i].innerHTML = init36.toFixed(0);
}


// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
	var value = this.value;
	var montlyreturnNumber = this.value * monthlyrate;
	
    investment.innerHTML = value;
	for(i = 0; i < 4; i++){ 	var val1 = (value * rates[i])*1; 	var val3 = (value * rates[i])*3; 	var val6 = (value * rates[i])*6; 	var val12 = (value * rates[i])*12; 	var val24 = (value * rates[i])*24; 	var val36 = (value * rates[i])*36; 	     monthly1return[i].innerHTML = val1.toFixed(0);     monthly3return[i].innerHTML = val3.toFixed(0);     monthly6return[i].innerHTML = val6.toFixed(0);     yearly1return[i].innerHTML = val12.toFixed(0);     yearly2return[i].innerHTML = val24.toFixed(0);     yearly3return[i].innerHTML = val36.toFixed(0); 	} } // ]]></script>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
            <!-- new line -->
            <div class="card mt-2 mb-4">
                                <div class="card-header card-title mb-3">Download Wallets</div>
                                <div class="card-body text-center">
                                <a href="https://qredit.io" class="btn btn-primary custom-btnblock m-1 mb-3">Download Qredit Wallet</a>
                                <a href="https://tokenmarket.net/what-is/ethereum-token-wallets/" class="btn btn-primary custom-btnblock m-1 mb-3">Download Ethereum Wallet</a>
                                    </div>
                                </div>
                            </div>
                            <!-- new line -->
<div class="card o-hidden mb-4">
                                <div class="card-header d-flex align-items-center border-0">
                                    <h3 class="w-50 float-left card-title m-0">Payout Reports</h3>

                                </div>

                                <div class="">
                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Month</th>
                                            <th scope="col">Paid amount in BTC</th>
                                            <th scope="col">Download Report</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">May 2019</th>
                                            <td>1.169883</td>
                                            <td><a href="https://hodler.enterprises/sync/2019/05/mining-report-may2019.pdf" class="badge badge-success">Download</a></td>

                                        </tr>
                                        <tr>
                                        <tr>
                                        <th scope="row">June 2019</th>
                                            <td>0.000000</td>
                                            <td><a href="https://hodler.enterprises/sync/2019/06/mining-report-june2019.pdf" class="badge badge-success">Download</a></td>
                                            

                                        </tr>
                                        <tr>
                                        <th scope="row">July 2019</th>
                                            <td>0.000000</td>
                                            <td><a href="#" class="badge badge-orange">Coming Soon</a></td>
                                            

                                        </tr>
                                    </tbody>
                                    
                                    
                                </table>
                                    </div>
                                </div>
                            </div>

<!-- new line -->
@endsection
