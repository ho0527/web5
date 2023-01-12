function drawBarChart(data) {
    const svg = d3.select('svg');
    // 透過 D3.js 計算縮放比例並繪製長條圖
    // ...
    // 設定 click 事件
    svg.selectAll('rect')
    .on('click', function(d) {
        // 篩選資料並重繪長條圖
        const filteredData = data.filter(item => item.county === d.county);
        drawBarChart(filteredData);
    });
}
