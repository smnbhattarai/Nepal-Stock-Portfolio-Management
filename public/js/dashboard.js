google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawDashboardPortfolio);

function drawDashboardPortfolio() {
    let portfolios = [];
    $.get("/ajax/get-portfolios")
        .done(function(res) {
            var d = res.data;
            for(let prop in d) {
                let arr = [];
                arr.push(prop);
                arr.push(d[prop]);
                arr.push('color: ' + getRandomColor() );
                portfolios.push(arr);
            }
console.log(portfolios);
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Scrip');
            data.addColumn('number', 'Total');
            data.addColumn({type: 'string', role: 'style'});

            data.addRows(portfolios);

            var options = {
                height: 400,
                title: 'Your Portfolio',
                hAxis: {
                    title: 'Scrips',
                },
                vAxis: {
                    title: 'Total stock'
                }
            };

            var chart = new google.visualization.ColumnChart(
                document.getElementById('portfolioVerticalChart'));

            chart.draw(data, options);

        })
        .fail(function(res) {

        });

}
