import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class StudentsService {

  Data:any;

  constructor(public httpClient: HttpClient) { }

  getStudents(): any{
    try{
    return this.httpClient.get('https://reqres.in/api/users?page=[page_number]&per_page=[students_per_page]');
    }
    catch(err){
      return err;
    }  
  }
  /*
  getStudent(id: any): any{
    try{
      return this.httpClient.get('https://reqres.in/api/users/${student_id}' + id).pipe(map(res=>{
        return res
      }));
    }
    catch(err){
      return err;
    }
  }*/
}
//${https://reqres.in/api/users?page=[page_number]&per_page=[students_per_page]}/${studentId}