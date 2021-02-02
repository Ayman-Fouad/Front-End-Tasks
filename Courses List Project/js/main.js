// Create Course Class 

class Course {
    constructor(title , instructor , price , description){
        this.title = title;
        this.price = price;
        this.instructor = instructor;
        this.description = description;
    }
}

// course Ui Class

class CourseUi{
    static showCourses(){
            const storedCourses = [
                {
                    title : 'Html5 Course',
                    instructor : 'John',
                    price : 500 ,
                    description : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, labore.'
                },
                {
                    title : 'Css3 Course',
                    instructor : 'Jack',
                    price : 800 ,
                    description : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, labore.'
                },
                {
                    title : 'Javascript Course',
                    instructor : 'Mark',
                    price : 1000 ,
                    description : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, labore.'
                },
            ]
            /*
            storedCourses.forEach((course)=>{
                console.log(course);
            })*/
            for(let course of storedCourses){
                //console.log(course);
                CourseUi.addCourseToView(course);
            }
    }

    static addCourseToView(course){
        const list = document.getElementById('course-list');
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${course.title}</td>
            <td>${course.instructor}</td>
            <td>${course.price}</td>
            <td>${course.description}</td>
            <td>
                <a href="#" class="btn btn-danger delete-course">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        `;
        list.appendChild(row);
    }
    // Add Method To Delete row
    static deleteCourse(item){
        if(item.classList.contains('delete-course')){
            item.parentElement.parentElement.remove();
        }

    }
    // Show Messages
    static showMessages(message ,  clsName){
         const div = document.createElement('div');
         div.className = `alert alert-${clsName}`;
         div.appendChild(document.createTextNode(message));
         const form = document.getElementById('courses-form');
         const formSection = document.querySelector('.form-section');
         formSection.insertBefore(div , form);
         // Remove Alert After 10 Seconds
         setTimeout(() => document.querySelector('.alert').remove(), 10000);
    }
    // Clear Inputs 
    static clearFields(){
        document.querySelector('#title').value = '';
        document.querySelector('#instructor').value = '';
        document.querySelector('#price').value = '';
        document.querySelector('#description').value = '';
    }
}

// Display All Courses

document.addEventListener('DOMContentLoaded' , CourseUi.showCourses);

// Add New Course 
document.getElementById('courses-form').addEventListener('submit' , (val)=>{
    // Prevent Default Submission
    val.preventDefault();
    // Get Form Values
    const title = document.getElementById('title').value;
    const instructor = document.getElementById('instructor').value;
    const price = document.getElementById('price').value;
    const description = document.getElementById('description').value;
    // Form Validation
    if(title === '' || instructor === '' || price === '' || description === ''){
        CourseUi.showMessages("Cann't Submit Null Fields !" , "danger");
    }else if(price < 500){
        CourseUi.showMessages('Price Is Very low , You Cannot Sell Any of Courses Less Than 500' , 'danger');
    }
    else{
    // Take an instance from course class
    const course = new Course(title , instructor , price, description);
    //console.log(course);
    CourseUi.addCourseToView(course);
    // Show Success Message 
    CourseUi.showMessages('Course Added Successfully' , 'success');
    // Clear Inputs
    CourseUi.clearFields();
    }
});

// Delete Course 
document.getElementById('course-list').addEventListener('click' , (val)=>{
   // console.log(val.target);
   CourseUi.deleteCourse(val.target);
   // Add Success Message
   CourseUi.showMessages('Course Removed Successfully' , 'warning');
});