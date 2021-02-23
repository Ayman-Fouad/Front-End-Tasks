import { Component, OnInit } from '@angular/core';
import { User } from '../user'

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent implements OnInit {

  usrObj : User = new User('ayman','2468','example@test.com','This works!');
  constructor() { }

  ngOnInit(): void {
  }

  onSendMessage() : void{
    console.log(this.usrObj);
  }
}

