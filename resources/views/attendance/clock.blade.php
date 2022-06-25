<style>
    body {
        height: 30%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(128, 128, 128);
    }

    #digital-clock {
        width: fit-content;
        font-size: 20px;
        text-align: center;
        font-size: 3vw;
        color: rgb(23, 243, 104);
    }

    .red-dot {
        color: red;
    }

</style>

<div id='digital-clock'>
    <span id='hour'></span><span class='red-dot'>:</span><span id='min'></span><span class='red-dot'>:</span><span
        id='second'></span>
</div>


<script>
    function showclock() {
        let today = new Date();
        let hours = today.getHours();
        let mins = today.getMinutes();
        let seconds = today.getSeconds();
        const addZero = num => {
            if (num < 10) {
                return '0' + num
            };
            return num;
        }
        $('#hour').text(addZero(hours));
        $('#min').text(addZero(mins));
        $('#second').text(addZero(seconds));
    }
    setInterval(showclock, 1000);
</script>
