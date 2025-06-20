<div wire:ignore>
    <canvas id="leads-chart">
    </canvas>
    </div>
    @assets
    <script src="build/js/chart.js"></script>
    @endassets
    @script
    <script>
        const ctx = document.getElementById('leads-chart');
      const deals=$wire.deals;
    const labels=deals.map(item=>item.Day);
    const values=deals.map(item=>item.Value);
        new Chart(ctx, {
          type: 'bar', //line, 
          data: {
            labels: labels,
            datasets: [{
              label: 'Leads',
              data: values,
              backgroundColor: '#00918E',  
              borderColor: '#00918E', 
              borderWidth: 1,
              barThickness: 20
            }]
          },
          options: {
            responsive: true,
              scales: {
                x: {
                  beginAtZero: true,
                  ticks: {
                    font: {
                      size: 10,
                      weight: 'bold' 
                    }
                  },
                  
                  grid: {
                    display: false 
                  }
                },
                y: {
                  beginAtZero: true,
                }
              },
              plugins: {
                legend: {
                  display: true
                }
              }
            }
        });
      </script>
      @endscript