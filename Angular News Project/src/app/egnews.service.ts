import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
@Injectable({
  providedIn: 'root'
})
export class EgnewsService {

  constructor(
    public httpClient : HttpClient
  ) { }
  getEgyptNews(): Observable<any>{
    try {
      return this.httpClient.get('https://newsapi.org/v2/top-headlines?country=eg&apiKey=c83125cfd607420b8af50135d6c09cf4');
    }
    catch (err) {
      return err;
    }
  }
}
