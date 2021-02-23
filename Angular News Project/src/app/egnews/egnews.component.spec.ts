import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EgnewsComponent } from './egnews.component';

describe('EgnewsComponent', () => {
  let component: EgnewsComponent;
  let fixture: ComponentFixture<EgnewsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EgnewsComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(EgnewsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
