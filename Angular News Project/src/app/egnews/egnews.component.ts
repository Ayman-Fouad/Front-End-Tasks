import { Component, OnInit } from '@angular/core';
import { EgnewsService } from '../egnews.service';

@Component({
  selector: 'app-egnews',
  templateUrl: './egnews.component.html',
  styleUrls: ['./egnews.component.css']
})
export class EgnewsComponent implements OnInit {
  news : Array<any> = [];
  constructor(public egNews : EgnewsService) {
    this.egNews.getEgyptNews().subscribe((data)=>{
      this.news = data.articles;
    });
   }

  ngOnInit(): void {
  }

}
