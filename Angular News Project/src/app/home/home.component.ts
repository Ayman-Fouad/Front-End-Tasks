import { Component, OnInit } from '@angular/core';
import { EgnewsService } from '../egnews.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {
  news : Array<any> = [];
  constructor(public egNews : EgnewsService) {
    this.egNews.getEgyptNews().subscribe((data)=>{
      this.news = data.articles;
    });
   }

  ngOnInit(): void {
  }

}
