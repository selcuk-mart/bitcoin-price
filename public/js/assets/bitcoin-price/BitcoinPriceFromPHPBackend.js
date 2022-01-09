class BitcoinPriceFromPHPBackend {

    constructor(elem) {
        this.elem = elem;
    }

    bind() {
        document.getElementById("myChartRender").addEventListener("click", () => {
            this.run()
        });
    }

    run() {
        let data_process = this.getData();
        var $this = this;
        data_process.then(function (remote_data) {
            $this.prepareChart(remote_data);
        });
    }

    getData() {
        return new Promise((resolve, reject) => {
            let start = document.getElementById('start-date').value;
            let finish = document.getElementById('finish-date').value;
            let url = '/fetch-bitcoin-price';
            $.ajax({
                url: url,
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    start: start,
                    end: finish,
                    currency: 'USD'
                },
                success: function (data) {
                    let result = data.bpi;
                    resolve(result);
                },
                dataType: 'json'
            });
        });
    }


    prepareLabel(returned) {
        if (Object.keys(returned).length > 0) {
            this.dates = [];
            this.data = [];

            for (let index in returned) {
                this.dates.push(index);
                this.data.push(returned[index]);

            }
        }
    }

    runChart() {
        this.bind();
        this.run();
    }

    prepareChart(remote_data) {
        if (this.myChart instanceof Chart) {
            this.myChart.destroy();
        }

        this.prepareLabel(remote_data);

        const data = {
            labels: this.dates,
            datasets: [{
                label: 'Bitcoin Price',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: this.data
            }]
        };
        const config = {
            type: 'line',
            data,
            options: {}
        };

        this.myChart = new Chart(
            document.getElementById(this.elem),
            config
        );
    }

    static getInstance(elem) {
        return new this(elem);
    }
}
