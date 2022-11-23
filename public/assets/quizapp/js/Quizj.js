
const quizData=[
    {
        question:"1+1",
        a:"2",
        b:"6",
        c:"10",
        d:"25",
        correct:"a"
    },

    {
        question:"1+1",
        a:"2",
        b:"6",
        c:"10",
        d:"0",
        correct:"a"
    },
    {
        question:"1+9",
        a:"2",
        b:"6",
        c:"10",
        d:"9",
        correct:"a"
    },
    {
        question:"8+1",
        a:"2",
        b:"6",
        c:"10",
        d:"25",
        correct:"a"
    },
    {
        question:"1+1",
        a:"2",
        b:"6",
        c:"10",
        d:"25",
        correct:"a"
    },
    {
        question:"1+1",
        a:"2",
        b:"6",
        c:"10",
        d:"25",
        correct:"a"
    },
];
const quiz=document.getElementById
const answerEls=document.querySelectorAll('.answer')
const questionE1=document.getElementById('question')
const a_text=document.getElementById('a_text')
const b_text=document.getElementById('b_text')
const c_text=document.getElementById('c_text')
const d_text=document.getElementById('d_text')

const submitBtn=document.getElementById('submit')

let currentQuiz = 0
let score = 0

function loadQuiz(){
    deselectAnswers()

    const currentQuizData = quizData[currentQuiz]

    questionE1.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}

function deselectAnswers(){
    let answer
    answerE1.forEach(answerE1=>{
        if(answerEl.checked){
            answer = answerEl.id
        }
    })
    return answer
}


submitBtn.addEventListener('click',()=> {
    const answer = getSelected()
    if (answer == quizData[currentQuiz].correct) {
        score++
    }
    currentQuiz++
    if (currentQuiz < quiz.length) {
        loadQuiz()
    } else {
        quiz.innerHTML ='<h2> You answered ${score}/${quizData.length}questions correctly</h2>'
    }


})
