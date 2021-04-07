import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { StudentsService } from '../students/students.service';

@Component({
  selector: 'app-student-detail',
  templateUrl: './student-detail.component.html',
  styleUrls: ['./student-detail.component.css']
})
export class StudentDetailComponent implements OnInit {

  id : any;
  data:any;

/*
  constructor(public std : StudentsService , public route : ActivatedRoute) {
    this.route.paramMap.subscribe(params =>{
      console.log(params.get('student_id'));
      this.std.getStudent(params.get('student_id')).subscribe((c:any) =>{
        this.student = c.data.id;
        console.log(this.student);
      })
    });
  
   }
*/
 constructor(public route : ActivatedRoute , public std : StudentsService){}
/*
  ngOnInit(): void {
    this.id = this.route.snapshot.params['id'];
    this.getStudent();
  }
  getStudent(){
    this.std.getStudent(this.id).subscribe((data:any)=>{
      this.data = data['Data'];
      console.log(this.data);
    })
  }
  */
  ngOnInit(): void {
    
  } 


}
