<div wire:ignore>
    <canvas id="leads-report">
    </canvas>
    </div>
    @assets
    <style>
    #leads-report {
        width: 544px !important;
        height: 275px !important;
    }
    </style>
    <script src="build/js/chart.js"></script>
    @endassets
    @script
    <script>
        const ctx = document.getElementById('leads-report');
      const deals=$wire.deals;
    const labels=deals.map(item=>item.Day);
    const values=deals.map(item=>item.Value);
        new Chart(ctx, {
          type: 'bar', //line, 
          data: {
            labels: labels,
            datasets: [{
              label: 'Category',
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