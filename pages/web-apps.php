<?php
$page_title = "Web Application Graphics Requirements";
$page_description = "Complete checklist of graphics needed for launching web applications including favicons, social media assets, and branding elements.";
include '../includes/header.php';
?>

<div class="page-header">
    <div class="container">
        <h1>Web Application Graphics Requirements</h1>
        <p>Everything you need for a professional web app launch</p>
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
            <h3>🎯 Essential Graphics (Must Have)</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="favicon-ico">
                <div class="checklist-item-content">
                    <h4><label for="favicon-ico">Favicon Package</label></h4>
                    <p><strong>Sizes:</strong> 16x16, 32x32, 48x48, 64x64, 128x128, 256x256 pixels<br>
                    <strong>Formats:</strong> ICO, PNG<br>
                    <strong>Purpose:</strong> Browser tab icon, bookmarks, desktop shortcuts</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="apple-touch-icon">
                <div class="checklist-item-content">
                    <h4><label for="apple-touch-icon">Apple Touch Icons</label></h4>
                    <p><strong>Sizes:</strong> 180x180, 167x167, 152x152, 120x120 pixels<br>
                    <strong>Format:</strong> PNG<br>
                    <strong>Purpose:</strong> iOS Safari bookmarks and home screen shortcuts</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="social-og">
                <div class="checklist-item-content">
                    <h4><label for="social-og">Open Graph Image</label></h4>
                    <p><strong>Size:</strong> 1200x630 pixels<br>
                    <strong>Format:</strong> PNG or JPG<br>
                    <strong>Purpose:</strong> Facebook, LinkedIn, and other social media link previews</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="twitter-card">
                <div class="checklist-item-content">
                    <h4><label for="twitter-card">Twitter Card Image</label></h4>
                    <p><strong>Size:</strong> 1200x600 pixels<br>
                    <strong>Format:</strong> PNG or JPG<br>
                    <strong>Purpose:</strong> Twitter link previews and social sharing</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="logo-main">
                <div class="checklist-item-content">
                    <h4><label for="logo-main">Primary Logo Package</label></h4>
                    <p><strong>Formats:</strong> SVG, PNG (transparent), JPG<br>
                    <strong>Variants:</strong> Full color, white version, black version<br>
                    <strong>Purpose:</strong> Header, footer, and general branding throughout the app</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="loading-spinner">
                <div class="checklist-item-content">
                    <h4><label for="loading-spinner">Loading Animation/Spinner</label></h4>
                    <p><strong>Format:</strong> CSS animation, SVG, or GIF<br>
                    <strong>Purpose:</strong> User feedback during data loading and processing</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>📱 PWA & Mobile Optimization</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="pwa-icons">
                <div class="checklist-item-content">
                    <h4><label for="pwa-icons">PWA Manifest Icons</label></h4>
                    <p><strong>Sizes:</strong> 72x72, 96x96, 128x128, 144x144, 152x152, 192x192, 384x384, 512x512<br>
                    <strong>Format:</strong> PNG<br>
                    <strong>Purpose:</strong> Progressive Web App installation and home screen icons</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="splash-screens">
                <div class="checklist-item-content">
                    <h4><label for="splash-screens">Mobile Splash Screens</label></h4>
                    <p><strong>Sizes:</strong> Multiple device-specific dimensions<br>
                    <strong>Format:</strong> PNG<br>
                    <strong>Purpose:</strong> Loading screen when app launches from home screen</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>🎨 User Interface Graphics</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="ui-icons">
                <div class="checklist-item-content">
                    <h4><label for="ui-icons">UI Icon Set</label></h4>
                    <p><strong>Format:</strong> SVG preferred, PNG fallback<br>
                    <strong>Style:</strong> Consistent style matching your brand<br>
                    <strong>Purpose:</strong> Navigation, buttons, features, and interface elements</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="placeholder-images">
                <div class="checklist-item-content">
                    <h4><label for="placeholder-images">Placeholder Images</label></h4>
                    <p><strong>Purpose:</strong> Empty states, missing profile pictures, image loading states<br>
                    <strong>Variants:</strong> User avatars, content placeholders, error states</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="hero-graphics">
                <div class="checklist-item-content">
                    <h4><label for="hero-graphics">Hero/Banner Graphics</label></h4>
                    <p><strong>Purpose:</strong> Landing page hero, dashboard headers, feature highlights<br>
                    <strong>Responsive:</strong> Multiple sizes for different screen sizes</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>📈 Marketing & Promotional Graphics</h3>
            
            <div class="checklist-item">
                <input type="checkbox" id="screenshots">
                <div class="checklist-item-content">
                    <h4><label for="screenshots">Product Screenshots</label></h4>
                    <p><strong>Purpose:</strong> Marketing materials, press kits, social media<br>
                    <strong>Quality:</strong> High resolution, showcasing key features</p>
                </div>
            </div>

            <div class="checklist-item">
                <input type="checkbox" id="feature-graphics">
                <div class="checklist-item-content">
                    <h4><label for="feature-graphics">Feature Highlight Graphics</label></h4>
                    <p><strong>Purpose:</strong> Landing page sections, blog posts, documentation<br>
                    <strong>Style:</strong> Illustrations or screenshots with callouts</p>
                </div>
            </div>
        </section>

        <section class="checklist">
            <h3>⚠️ Common Mistakes to Avoid</h3>
            
            <div class="warning-box">
                <h4>Favicon Formats</h4>
                <p>Don't rely on just one favicon.ico file. Modern browsers and devices need multiple sizes and formats for optimal display.</p>
            </div>

            <div class="warning-box">
                <h4>Social Media Images</h4>
                <p>Each platform has different optimal dimensions. Using the wrong size can result in cropped or distorted previews.</p>
            </div>

            <div class="warning-box">
                <h4>Loading States</h4>
                <p>Missing loading animations leave users wondering if the app is working. Always provide visual feedback during operations.</p>
            </div>
        </section>

        <section class="checklist">
            <h3>💡 Pro Tips</h3>
            
            <div class="tip-box">
                <h4>Icon Consistency</h4>
                <p>Use a consistent icon style throughout your app. Whether you choose outline, filled, or mixed styles, stick to it for better user experience.</p>
            </div>

            <div class="tip-box">
                <h4>Responsive Images</h4>
                <p>Always provide multiple image sizes and use responsive techniques like srcset to serve appropriate images for different devices.</p>
            </div>

            <div class="tip-box">
                <h4>Brand Colors</h4>
                <p>Ensure your graphics work well in both light and dark themes if your app supports theme switching.</p>
            </div>
        </section>

        <h2>Technical Specifications</h2>
        <table class="specs-table">
            <thead>
                <tr>
                    <th>Asset Type</th>
                    <th>Recommended Size</th>
                    <th>Format</th>
                    <th>File Size Limit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Favicon ICO</td>
                    <td>16x16 to 256x256</td>
                    <td>ICO</td>
                    <td>< 100KB</td>
                </tr>
                <tr>
                    <td>Apple Touch Icon</td>
                    <td>180x180px</td>
                    <td>PNG</td>
                    <td>< 500KB</td>
                </tr>
                <tr>
                    <td>Open Graph</td>
                    <td>1200x630px</td>
                    <td>PNG/JPG</td>
                    <td>< 8MB</td>
                </tr>
                <tr>
                    <td>UI Icons</td>
                    <td>24x24px base</td>
                    <td>SVG</td>
                    <td>< 50KB each</td>
                </tr>
                <tr>
                    <td>Hero Images</td>
                    <td>1920x1080px</td>
                    <td>WebP/JPG</td>
                    <td>< 2MB</td>
                </tr>
            </tbody>
        </table>

        <div style="margin: 3rem 0; text-align: center;">
            <a href="../" class="cta-button">← Back to All Guides</a>
        </div>

    </div>
</main>

<?php include '../includes/footer.php'; ?>