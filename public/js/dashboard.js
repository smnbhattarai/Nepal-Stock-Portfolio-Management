google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Scrip');
    data.addColumn('number', 'Total');

    data.addRows([
        ['AHPC', 30],
        ['NIFRA', 50],
    ]);

    var options = {
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
}
