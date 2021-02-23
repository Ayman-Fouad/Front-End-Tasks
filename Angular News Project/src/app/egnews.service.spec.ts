import { TestBed } from '@angular/core/testing';

import { EgnewsService } from './egnews.service';

describe('EgnewsService', () => {
  let service: EgnewsService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(EgnewsService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
