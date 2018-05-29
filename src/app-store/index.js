import { dedupingMixin } from '@polymer/polymer/lib/utils/mixin';
import { ReduxMixin } from '@littleq/state-manager';
import './lib/reducer';

export const AppStore = dedupingMixin(superClass => {
  class AppStore extends ReduxMixin(superClass) {
    static get properties () {
      return {
      
        AppStore: {
          type: String,
          statePath: 'appStore.state',
          observer: '_AppStoreChanged'
        }
      
      };
    }

    _AppStoreChanged () {}

   
  }

  return AppStore;
});
