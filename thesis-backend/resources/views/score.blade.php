<button onclick="sendScore()">+2 Red</button>

<script>
async function sendScore() {
    await fetch('http://192.168.1.25:8000/api/score', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            judge_id: 1,
            fighter: 'red',
            points: 2
        })
    })
}
</script>