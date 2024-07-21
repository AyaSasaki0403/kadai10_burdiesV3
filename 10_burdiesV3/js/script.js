let currentQuestion = 0;

function showQuestion(index) {
    const questions = document.querySelectorAll('.question');
    questions.forEach((question, i) => {
        question.style.display = (i === index) ? 'block' : 'none';
    });
}

function nextQuestion() {
    const questions = document.querySelectorAll('.question');
    if (currentQuestion < questions.length - 1) {
        currentQuestion++;
        showQuestion(currentQuestion);
    }
}

function prevQuestion() {
    if (currentQuestion > 0) {
        currentQuestion--;
        showQuestion(currentQuestion);
    }
}

showQuestion(currentQuestion);

function toggleInput() {
    var checkbox = document.getElementById("activateInput");
    var inputField = document.getElementById("freeTextInput");
    inputField.disabled = !checkbox.checked;
}

document.getElementById('imageUpload').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        const img = document.createElement('img');
        img.src = e.target.result;
        img.classList.add('favorite-image');
        const previewDiv = document.getElementById('imagePreview');
        previewDiv.innerHTML = '';
        previewDiv.appendChild(img);
        previewDiv.style.display = 'flex';
      }
      reader.readAsDataURL(file);
    }
  });

document.getElementById('regiDate').addEventListener('change', function() {
    var chosenDate = new Date(this.value);
    var today = new Date();
    today.setHours(0, 0, 0, 0);
    chosenDate.setHours(0, 0, 0, 0);
    
    if (chosenDate <= today) {
    } else{
        alert('選択された日付は未来の日付です。今日より前の日付を選択してください。');
        this.value = ''; 
    }
});
