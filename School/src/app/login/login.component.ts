import { Component, OnInit } from '@angular/core';
import { NgForm } from '@angular/forms';
import { signInData } from '../model/signInData';
import { AuthenticationService } from '../service/authentication/authentication.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  isFormInValid = false;
  areCredentialsInvalid = false;

  constructor(private authenticationService: AuthenticationService) { }

  ngOnInit(): void {
  }

  onSubmit(signInForm: NgForm){
    if(!signInForm.valid){
      this.isFormInValid = true;
      this.areCredentialsInvalid = false;
      return;
    }
    this.checkCredentials(signInForm);
  }

  private checkCredentials(signInForm: NgForm){
    const sign = new signInData(signInForm.value.email , signInForm.value.password);
    if(!this.authenticationService.authenticate(sign)){
      this.isFormInValid = false;
      this.areCredentialsInvalid = true;
    }
  }
}
