document.getElementById('destinationForm').addEventListener('submit', function(event) {
    const name = document.querySelector('input[name="name"]').value;
    const choice = document.querySelector('input[name="choice"]:checked')?.value;

    if (!choice) {
        alert('Silakan pilih destinasi!');
        event.preventDefault(); // Prevent form submission
    } else {
        alert(`Terima kasih, ${name}! Kamu memilih destinasi ${choice}.`);
    }
});