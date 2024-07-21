document.addEventListener('DOMContentLoaded', function () {
    fetch('mypage.php')
        .then(response => response.json())
        .then(data => {

                document.getElementById('name').textContent = `${data.familyname} ${data.firstname}`;
                document.getElementById('gender').textContent = `${data.gender}`;
                document.getElementById('birthday').textContent = `${data.birthday}`;
                document.getElementById('email').textContent = `${data.email}`;
                })
        .catch(error => console.error('Error fetching user data:', error));
});
