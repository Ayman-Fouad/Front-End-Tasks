import { Component, OnInit } from '@angular/core';
import { StudentsService } from '../students/students.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  students : Array<any> = [];

  constructor(public std : StudentsService , public router : Router) { 
    this.std.getStudents().subscribe((data:any)=>{
      this.students = data.data;
      console.log(this.students);
    });
  }

  ngOnInit(): void {
  }
  onSubmit(data:any): void{
    this.std.getStudents().push(data.data);
  }
}
