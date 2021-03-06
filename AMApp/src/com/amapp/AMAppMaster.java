package com.amapp;

import android.support.design.widget.NavigationView;
import android.text.SpannableString;
import android.text.style.RelativeSizeSpan;
import android.view.MenuItem;
import android.view.View;
import android.view.Window;

import com.android.volley.toolbox.NetworkImageView;
import com.smart.customviews.SmartTextView;
import com.smart.framework.Constants;
import com.smart.framework.SmartApplication;
import com.smart.framework.SmartSuperMaster;

/**
 * Created by tasol on 23/6/15.
 */
public abstract class AMAppMaster extends SmartSuperMaster implements Constants{

    enum NAVIGATION_ITEMS{HOME,HISTORY,PROMOTIONS,FREE_PASSES,RATE_US,CONTACT_US,LOGOUT}
    protected enum LOGIN_OPTIONS {LOCAL_SERVER, FACEBOOK, GOOGLE_PLUS}

    protected NavigationView navigationView;
    private NetworkImageView profilePic;
    private SmartTextView profileName;


    @Override
    public View getFooterLayoutView() {
        return null;
    }

    @Override
    public int getFooterLayoutID() {
        return 0;
    }

    @Override
    public View getHeaderLayoutView() {
        return null;
    }

    @Override
    public int getHeaderLayoutID() {
        return 0;
    }

    @Override
    public void setAnimations() {

        getWindow().requestFeature(Window.FEATURE_CONTENT_TRANSITIONS);
        getWindow().setAllowEnterTransitionOverlap(true);
        getWindow().setAllowReturnTransitionOverlap(true);
    }

    @Override
    public void initComponents() {

        navigationView= (NavigationView) findViewById(R.id.navigationView);
        profilePic = (NetworkImageView) navigationView.findViewById(R.id.imgProfilePic);
        profileName= (SmartTextView) navigationView.findViewById(R.id.txtProfileName);
        getSupportActionBar().setDisplayShowTitleEnabled(false);

        /*if(SmartApplication.REF_SMART_APPLICATION.readSharedPreferences().getString(USER_IMAGE,null)!=null){

            profilePic.setImageUrl(SmartApplication.REF_SMART_APPLICATION.readSharedPreferences().getString(USER_IMAGE, ""), SmartWebManager.getInstance(this).getImageLoader());
        }

        if(SmartApplication.REF_SMART_APPLICATION.readSharedPreferences().getString(USER_NAME,null)!=null){

            ((SmartTextView)navigationView.findViewById(R.id.txtProfileName)).setText(SmartApplication.REF_SMART_APPLICATION.readSharedPreferences().getString(USER_NAME,""));

        }*/

        setLogoutIcon();

        String s= navigationView.getMenu().getItem(NAVIGATION_ITEMS.FREE_PASSES.ordinal()).getTitle().toString()+"              "+"5";
        int freePasses=Integer.parseInt(s.replaceAll("[\\D]", ""));
        SpannableString ss1=  new SpannableString(s);
        ss1.setSpan(new RelativeSizeSpan(1.3f), s.indexOf(String.valueOf(freePasses)),s.length(), 0); // set size
//        ss1.setSpan(new ForegroundColorSpan(getResources().getColor(R.color.primary900)), s.indexOf(String.valueOf(freePasses)),s.length(), 0);// set color
        navigationView.getMenu().getItem(NAVIGATION_ITEMS.FREE_PASSES.ordinal()).setTitle(ss1);
    }

    @Override
    public void prepareViews() {


    }

    private void setLogoutIcon() {

        int loggedInWith=SmartApplication.REF_SMART_APPLICATION.readSharedPreferences().getInt(LOGGED_IN_WITH,-1);

        if(loggedInWith==LOGIN_OPTIONS.LOCAL_SERVER.ordinal()) {


        }else if(loggedInWith==LOGIN_OPTIONS.FACEBOOK.ordinal()) {

            navigationView.getMenu().getItem(NAVIGATION_ITEMS.LOGOUT.ordinal()).setIcon(R.drawable.ic_facebook_box_white_24dp);
        }else if(loggedInWith==LOGIN_OPTIONS.GOOGLE_PLUS.ordinal()) {

            navigationView.getMenu().getItem(NAVIGATION_ITEMS.LOGOUT.ordinal()).setIcon(R.drawable.ic_google_plus_white_24dp);
        }
    }

    @Override
    public void setActionListeners() {
        navigationView.setNavigationItemSelectedListener(new NavigationView.OnNavigationItemSelectedListener() {
            @Override
            public boolean onNavigationItemSelected(MenuItem menuItem) {

                closeDrawer();
                menuItem.setChecked(true);
//                switch (menuItem.getItemId()) {
//                    case R.id.navHome:
//                        ActivityOptionsCompat options = ActivityOptionsCompat.makeSceneTransitionAnimation(AMAppMaster.this);
//                        Intent intent = new Intent(AMAppMaster.this, TempleListActivity.class);
//                        ActivityCompat.startActivity(AMAppMaster.this,intent, options.toBundle());
//
//                        return true;
//                    case R.id.navBookingHistory:
//                        options = ActivityOptionsCompat.makeSceneTransitionAnimation(AMAppMaster.this);
//                        intent = new Intent(AMAppMaster.this, DPGymBookingHistoryActivity.class);
//                        ActivityCompat.startActivity(AMAppMaster.this,intent, options.toBundle());
//
//                        return true;
//                    case R.id.navPromotions:
//
//                        options = ActivityOptionsCompat.makeSceneTransitionAnimation(AMAppMaster.this);
//                        intent = new Intent(AMAppMaster.this, DPGymPromotionsActivity.class);
//                        ActivityCompat.startActivity(AMAppMaster.this,intent, options.toBundle());
//
//                        return true;
//                    case R.id.navFreePasses:
//
//                        options = ActivityOptionsCompat.makeSceneTransitionAnimation(AMAppMaster.this);
//                        intent = new Intent(AMAppMaster.this, DPGymFreePassActivity.class);
//                        ActivityCompat.startActivity(AMAppMaster.this,intent, options.toBundle());
//
//                        return true;
//                    case R.id.navRateUs:
//
//                        Uri uri = Uri.parse("market://details?id=" + getPackageName());
//                        Intent goToMarket = new Intent(Intent.ACTION_VIEW, uri);
//                        try {
//                            startActivity(goToMarket);
//                        } catch (ActivityNotFoundException e) {
//
//                            SmartUtils.showSnackBar(AMAppMaster.this, getString(R.string.can_not_launch_market), Snackbar.LENGTH_INDEFINITE);
//
//
//                        }
//                        return true;
//                    case R.id.navContactUs:
//
//                        options = ActivityOptionsCompat.makeSceneTransitionAnimation(AMAppMaster.this);
//                        intent = new Intent(AMAppMaster.this, DPGymContactUsActivity.class);
//                        ActivityCompat.startActivity(AMAppMaster.this,intent, options.toBundle());
//                        return true;
//                    case R.id.navLogout:
//
//                        intent=new Intent(AMAppMaster.this, LoginActivity.class);
//                        SmartUtils.clearActivityStack(AMAppMaster.this,intent);
//                        finish();
//                        return true;
//
//                    default:
//                        return true;
//                }
                return true;
            }
        });
    }

    @Override
    public void postOnCreate() {

    }

    @Override
    public boolean shouldKeyboardHideOnOutsideTouch() {
        return true;
    }

    @Override
    public int getDrawerLayoutID() {

        return R.layout.drawer;
    }



    protected void selectDrawerItem(NAVIGATION_ITEMS item) {

        navigationView.getMenu().getItem(item.ordinal()).setChecked(true);

    }


}
