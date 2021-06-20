<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front-End Test</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    
    
    <div class="content">
        <div class="card-info w100">
            <div class="card-info-single">
                <div class="card-info-wraper">
                    <h2>Estimated Balance</h2>
                    <p class="balance">$32.255,06</p>
                </div>
            </div>
            <div class="card-info-single">
                <div class="card-info-wraper">
                    <h2>Change In 24h</h2>
                    <p class="change">+0.46%</p>
                </div>
            </div>
            <div class="card-info-single">
                <div class="card-info-wraper">
                    <h2>Best Asset in 24h</h2>
                    <p class="best">+3.28%</p>
                </div>
            </div>
            <div class="card-info-single">
                <div class="card-info-wraper">
                    <h2>Worst Asset in 24h</h2>
                    <p class="worst">-2.23%</p>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="card-info">
            <div class="card-info-chart">
                <div class="card-info-chart-single">
                    <div class="card-info-chart-wraper">    
                        <h2>Asset Distribution</h2>
                        <div class="chart-doughnut">
                            <canvas id="doughnut" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="card-info-chart">
                <div class="card-info-chart-single">
                    <div class="card-info-chart-wraper">    
                        <h2>
                            Portfolio Performance <span>In BTC</span> <span>In USD</span></h2>
                        <div class="chart-line">
                            <canvas id="line" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>Asset</th>
                        <th>Total</th>
                        <th>USD Value</th>
                        <th>24H Change</th>
                        <th>Distribution</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ação A</td>
                        <td>598,91</td>
                        <td>$32.255,06</td>
                        <td></td>
                        <td>46,98%</td>
                    </tr>
                    <tr>
                        <td>Ação B</td>
                        <td>0,33962222</td>
                        <td>$12.324,9</td>
                        <td>0.00%</td>
                        <td>17.95%</td>
                    </tr>
                    <tr>
                        <td>Ação C</td>
                        <td>3,04</td>
                        <td>$7.770,73</td>
                        <td>+3.20%</td>
                        <td>11.32%</td>
                    </tr>
                    <tr>
                        <td>Ação D</td>
                        <td>644,26</td>
                        <td>$6.281,09</td>
                        <td>+0.80%</td>
                        <td>9.15%</td>
                    </tr>
                    <tr>
                        <td>Ação E</td>
                        <td>107,12</td>
                        <td>$5.907,66</td>
                        <td></td>
                        <td>8.61%</td>
                    </tr>
                    <tr>
                        <td>Ação F</td>
                        <td>4.716,72</td>
                        <td>$1.615,84</td>
                        <td>-0.25%</td>
                        <td>2.35%</td>
                    </tr>
                </tbody>
            </table>
          </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="charts.js"></script>
</body>
</html>