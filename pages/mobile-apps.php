<?php
$page_title = "Mobile App Graphics Requirements";
$page_description = "Complete checklist of graphics needed for launching iOS and Android mobile apps including app icons, store screenshots, and promotional materials.";
include '../includes/header.php';
?>

<div class="page-header">
    <div class="container">
        <h1>Mobile App Graphics Requirements</h1>
        <p>iOS & Android launch graphics checklist</p>
    </div>
</div>

<main class="page-content">
    <div class="container">
        
        <div class="progress-container" style="background: #f7fafc; border-radius: 8px; padding: 1rem; margin-bottom: 2rem;">
            <div class="progress-text" style="text-align: center; margin-bottom: 0.5rem; font-weight: 600;">0 of 0 items completed (0%)</div>
            <div style="background: #e2e8f0; height: 8px; border-radius: 4px; overflow: hidden;">
                <div class="progress-bar" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 100%; width: 0%; transition: width 0.3s ease;"></div>
            </div>
        </div>

        <section class="checklist">
            <h3>📱 iOS App Store Requirements</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="ios-app-icon">
                <div class="checklist-item-content">
                    <h4><label for="ios-app-icon">iOS App Icon</label></h4>
                    <p><strong>Size:</strong> 1024x1024 pixels<br>
                    <strong>Format:</strong> PNG (no transparency)<br>
                    <strong>Purpose:</strong> App Store listing and device home screen</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="ios-screenshots">
                <div class="checklist-item-content">
                    <h4><label for="ios-screenshots">iOS Screenshots</label></h4>
                    <p><strong>Required:</strong> iPhone 6.7" (1290x2796) and iPhone 6.5" (1242x2688)<br>
                    <strong>Optional:</strong> iPad Pro 12.9" (2048x2732)<br>
                    <strong>Format:</strong> PNG or JPEG<br>
                    <strong>Quantity:</strong> Up to 10 per device type</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="ios-preview">
                <div class="checklist-item-content">
                    <h4><label for="ios-preview">App Preview Videos (Optional)</label></h4>
                    <p><strong>Duration:</strong> 15-30 seconds<br>
                    <strong>Format:</strong> M4V, MP4, or MOV<br>
                    <strong>Resolution:</strong> Match screenshot dimensions<br>
                    <strong>Purpose:</strong> Show app functionality in App Store</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>🤖 Android Play Store Requirements</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="android-app-icon">
                <div class="checklist-item-content">
                    <h4><label for="android-app-icon">Android App Icon</label></h4>
                    <p><strong>Size:</strong> 512x512 pixels<br>
                    <strong>Format:</strong> PNG (32-bit with transparency)<br>
                    <strong>Purpose:</strong> Google Play Store listing</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="android-screenshots">
                <div class="checklist-item-content">
                    <h4><label for="android-screenshots">Android Screenshots</label></h4>
                    <p><strong>Phone:</strong> Minimum 320px, maximum 3840px<br>
                    <strong>Tablet:</strong> 7-inch and 10-inch variants<br>
                    <strong>Format:</strong> PNG or JPEG<br>
                    <strong>Quantity:</strong> 2-8 screenshots required</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="android-feature-graphic">
                <div class="checklist-item-content">
                    <h4><label for="android-feature-graphic">Feature Graphic</label></h4>
                    <p><strong>Size:</strong> 1024x500 pixels<br>
                    <strong>Format:</strong> PNG or JPEG<br>
                    <strong>Purpose:</strong> Play Store promotional banner</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>🎯 In-App Icon Requirements</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="ios-icon-sizes">
                <div class="checklist-item-content">
                    <h4><label for="ios-icon-sizes">iOS Icon Bundle</label></h4>
                    <p><strong>Sizes:</strong> 20x20, 29x29, 40x40, 58x58, 60x60, 80x80, 87x87, 120x120, 180x180<br>
                    <strong>Format:</strong> PNG<br>
                    <strong>Purpose:</strong> Various iOS interface contexts (settings, notifications, etc.)</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="android-icon-sizes">
                <div class="checklist-item-content">
                    <h4><label for="android-icon-sizes">Android Icon Bundle</label></h4>
                    <p><strong>Densities:</strong> mdpi (48x48), hdpi (72x72), xhdpi (96x96), xxhdpi (144x144), xxxhdpi (192x192)<br>
                    <strong>Format:</strong> PNG<br>
                    <strong>Purpose:</strong> Different Android device densities</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="adaptive-icon">
                <div class="checklist-item-content">
                    <h4><label for="adaptive-icon">Android Adaptive Icon</label></h4>
                    <p><strong>Components:</strong> Foreground (108x108dp) and Background (108x108dp)<br>
                    <strong>Format:</strong> Vector drawable or PNG<br>
                    <strong>Purpose:</strong> Android 8.0+ adaptive icon system</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>🖼️ Launch Screens & Splash</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="ios-launch-screen">
                <div class="checklist-item-content">
                    <h4><label for="ios-launch-screen">iOS Launch Screen</label></h4>
                    <p><strong>Method:</strong> Storyboard (recommended) or static images<br>
                    <strong>Purpose:</strong> Instant app appearance while loading<br>
                    <strong>Design:</strong> Should match first app screen for seamless transition</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="android-splash">
                <div class="checklist-item-content">
                    <h4><label for="android-splash">Android Splash Screen</label></h4>
                    <p><strong>Components:</strong> Background color, center icon, branding<br>
                    <strong>API:</strong> Android 12+ native splash screen or custom implementation<br>
                    <strong>Duration:</strong> Should be minimal for best UX</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>🎨 In-App Graphics</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="onboarding-graphics">
                <div class="checklist-item-content">
                    <h4><label for="onboarding-graphics">Onboarding Illustrations</label></h4>
                    <p><strong>Purpose:</strong> Guide new users through app features<br>
                    <strong>Style:</strong> Match your app's design language<br>
                    <strong>Format:</strong> SVG or high-res PNG</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="empty-states">
                <div class="checklist-item-content">
                    <h4><label for="empty-states">Empty State Graphics</label></h4>
                    <p><strong>Purpose:</strong> When lists/content areas are empty<br>
                    <strong>Tone:</strong> Encouraging and helpful<br>
                    <strong>Include:</strong> Clear call-to-action</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="error-graphics">
                <div class="checklist-item-content">
                    <h4><label for="error-graphics">Error State Graphics</label></h4>
                    <p><strong>Purpose:</strong> Network errors, crashes, maintenance<br>
                    <strong>Tone:</strong> Friendly and reassuring<br>
                    <strong>Variants:</strong> No internet, server error, 404, etc.</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="tab-bar-icons">
                <div class="checklist-item-content">
                    <h4><label for="tab-bar-icons">Tab Bar/Navigation Icons</label></h4>
                    <p><strong>States:</strong> Selected and unselected<br>
                    <strong>Style:</strong> Consistent with platform guidelines<br>
                    <strong>Format:</strong> Vector (SF Symbols for iOS, Material Icons for Android)</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>📢 Marketing Materials</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="press-kit">
                <div class="checklist-item-content">
                    <h4><label for="press-kit">Press Kit Graphics</label></h4>
                    <p><strong>Include:</strong> High-res app icon, screenshots, promotional images<br>
                    <strong>Purpose:</strong> Media coverage and partnerships<br>
                    <strong>Format:</strong> Multiple formats (PNG, JPG, EPS)</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="social-media-assets">
                <div class="checklist-item-content">
                    <h4><label for="social-media-assets">Social Media Assets</label></h4>
                    <p><strong>Platforms:</strong> Instagram, Twitter, Facebook, TikTok<br>
                    <strong>Types:</strong> Posts, stories, profile images<br>
                    <strong>Content:</strong> App screenshots, features, announcements</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="promotional-graphics">
                <div class="checklist-item-content">
                    <h4><label for="promotional-graphics">Promotional Graphics</label></h4>
                    <p><strong>Purpose:</strong> Ads, banners, website integration<br>
                    <strong>Sizes:</strong> Multiple ad network requirements<br>
                    <strong>Message:</strong> Clear value proposition</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>⚠️ Platform-Specific Guidelines</h3>
            
            <div class="warning-box">
                <h4>iOS Human Interface Guidelines</h4>
                <p>Follow Apple's design principles: clarity, deference, and depth. Avoid using Apple's trademark icons or copying iOS interface elements exactly.</p>
            </div>

            <div class="warning-box">
                <h4>Android Material Design</h4>
                <p>Adhere to Material Design principles for consistency with Android ecosystem. Use appropriate elevation, motion, and color schemes.</p>
            </div>

            <div class="warning-box">
                <h4>App Store Rejection Risks</h4>
                <p>Avoid placeholder content, low-quality graphics, or misleading screenshots. Both stores are strict about graphic quality and accuracy.</p>
            </div>
        </section>

        <h2>Platform Comparison Table</h2>
        <table class="specs-table">
            <thead>
                <tr>
                    <th>Requirement</th>
                    <th>iOS</th>
                    <th>Android</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Store Icon</td>
                    <td>1024x1024 PNG</td>
                    <td>512x512 PNG</td>
                    <td>High quality required</td>
                </tr>
                <tr>
                    <td>Screenshots</td>
                    <td>Device specific sizes</td>
                    <td>Flexible aspect ratios</td>
                    <td>Show actual app content</td>
                </tr>
                <tr>
                    <td>App Bundle Icons</td>
                    <td>Multiple sizes required</td>
                    <td>Density-based system</td>
                    <td>Vector recommended</td>
                </tr>
                <tr>
                    <td>Launch Screen</td>
                    <td>Storyboard preferred</td>
                    <td>Splash screen API</td>
                    <td>Keep minimal</td>
                </tr>
            </tbody>
        </table>

        <div style="margin: 3rem 0; text-align: center;">
            <a href="../" class="cta-button">← Back to All Guides</a>
        </div>

    </div>
</main>

<?php include '../includes/footer.php'; ?>