import { reducers, store } from '@littleq/state-manager';
import { combineReducers } from 'redux';

const APP_ACTION = {
  UPDATE_STATE: 'APP_LOADING',
};

reducers.appStore = (appStore = {
  state: 'loading',
}, action) => {
  switch (action.type) {
    case APP_ACTION.UPDATE_STATE:
      return Object.assign({}, appStore, {
        state: action.state
      });
   
    default:
      return appStore;
  }
};

store.replaceReducer(combineReducers(reducers));

export { APP_ACTION };
